import { EditIcon, DeleteIcon } from "@chakra-ui/icons";
import {
  Box,
  Flex,
  Button,
  useDisclosure,
  Table,
  Thead,
  Tr,
  Th,
  Tbody,
  Td,
  useBreakpointValue,
} from "@chakra-ui/react";
import { useEffect, useState } from "react";
import ModalComp from "./components/ModalComp";
import NivelModal from "./components/NivelModal";
import axios from "axios";

const App = () => {
  const { isOpen, onOpen, onClose } = useDisclosure();
  const [data, setData] = useState([]);
  const [dataEdit, setDataEdit] = useState({});
  const [niveis, setNiveis] = useState([]);

  const isMobile = useBreakpointValue({
    base: true,
    lg: false,
  });

  useEffect(() => {
    getDevs();
  }, []);

  const getDevs = async () => {
    await axios.get("http://127.0.0.1:8000/desenvolvedor").then((response) => {
      setData(response.data.desenvolvedors);
    });
  };
  const handleRemove = (email) => {
    const newArray = data.filter((item) => item.email !== email);

    setData(newArray);

    localStorage.setItem("cad_dev", JSON.stringify(newArray));
  };

  return (
    <Flex
      h="100vh"
      align="center"
      justify="center"
      fontSize="20px"
      fontFamily="poppins"
    >
      <Box maxW={800} w="100%" h="100vh" py={10} px={2}>
        <Button colorScheme="blue" onClick={() => [setDataEdit({}), onOpen()]}>
          NOVO DESENVOLVEDOR
        </Button>

        <Button
          colorScheme="red"
          onClick={() => [setDataEdit({}), onOpen()]}
        >
          TABELA DE NÍVEIS
        </Button>

        <Button colorScheme="green" onClick={() => [setDataEdit({}), onOpen()]}>
          NOVO NÍVEL
        </Button>

        <Box overflowY="auto" height="100%">
          <Table mt="6">
            <Thead>
              <Tr>
                <Th maxW={isMobile ? 5 : 100} fontSize="20px">
                  Nome
                </Th>
                <Th maxW={isMobile ? 5 : 100} fontSize="20px">
                  E-Mail
                </Th>
                <Th maxW={isMobile ? 5 : 100} fontSize="20px">
                  Nível
                </Th>
                <Th p={0}></Th>
                <Th p={0}></Th>
              </Tr>
            </Thead>
            {console.log(data)}
            <Tbody>
              {data &&
                data.map(({ nome, email, nome_nivel }, index) => (
                  <Tr key={index} cursor="pointer " _hover={{ bg: "gray.100" }}>
                    <Td maxW={isMobile ? 5 : 100}>{nome}</Td>
                    <Td maxW={isMobile ? 5 : 100}>{email}</Td>
                    <Td maxW={isMobile ? 5 : 100}>{nome_nivel}</Td>
                    <Td p={0}>
                      <EditIcon
                        fontSize={20}
                        onClick={() => [
                          setDataEdit({ nome, email, index }),
                          onOpen(),
                        ]}
                      />
                    </Td>
                    <Td p={0}>
                      <DeleteIcon
                        fontSize={20}
                        onClick={() => handleRemove(email)}
                      />
                    </Td>
                  </Tr>
                ))}
            </Tbody>
          </Table>
        </Box>
      </Box>
      {isOpen && (
        <ModalComp
          isOpen={isOpen}
          onClose={onClose}
          data={data}
          setData={setData}
          dataEdit={dataEdit}
          setDataEdit={setDataEdit}
        />
      )}
    </Flex>
  );
};

export default App;

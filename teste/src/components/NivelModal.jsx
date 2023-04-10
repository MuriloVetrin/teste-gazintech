import { useState, useEffect } from "react";
import {
  Modal,
  ModalOverlay,
  ModalContent,
  ModalHeader,
  ModalCloseButton,
  ModalBody,
  ModalFooter,
  Button,
  FormControl,
  FormLabel,
  Input,
} from "@chakra-ui/react";

const Nivel = ({ isOpen, onClose, data, setData, dataEdit, setDataEdit }) => {
  const [nivelNome, setNivelNome] = useState("");

  useEffect(() => {
    setNivelNome(dataEdit?.nome ?? "");
  }, [dataEdit]);

  const handleSubmit = (e) => {
    e.preventDefault();

    if (!nivelNome.trim()) {
      alert("Por favor, preencha o nome do nível.");
      return;
    }

    if (dataEdit?.index !== undefined) {
      const newArray = [...data];
      newArray[dataEdit.index] = { nome: nivelNome };
      setData(newArray);
      localStorage.setItem("cad_nivel", JSON.stringify(newArray));
    } else {
      const newItem = { nome: nivelNome };
      setData([...data, newItem]);
      localStorage.setItem(
        "cad_nivel",
        JSON.stringify([...data, newItem])
      );
    }

    onClose();
  };

  return (
    <Modal isOpen={isOpen} onClose={onClose}>
      <ModalOverlay />
      <ModalContent>
        <form onSubmit={handleSubmit}>
          <ModalHeader>{dataEdit?.nome ? "Editar" : "Adicionar"} Nível</ModalHeader>
          <ModalCloseButton />
          <ModalBody>
            <FormControl id="nome" isRequired>
              <FormLabel>Nome</FormLabel>
              <Input
                type="text"
                value={nivelNome}
                onChange={(e) => setNivelNome(e.target.value)}
              />
            </FormControl>
          </ModalBody>
          <ModalFooter>
            <Button variant="ghost" onClick={onClose}>
              Cancelar
            </Button>
            <Button type="submit" colorScheme="blue" ml={3}>
              Salvar
            </Button>
          </ModalFooter>
        </form>
      </ModalContent>
    </Modal>
  );
};

export default Nivel;

import { FlatList, StyleSheet } from 'react-native';

import Produto from './Produto';

export default function App(props) {
  return (
      <FlatList
        data={props.produtos}//dados que vão preencher a lista
        renderItem={({item}) => (
          <Produto 
            imagem = {item.imagem}
            nome = {item.nome}
            preco = {item.preco}
          />
        )}
        keyExtractor={(item) => item.id}
      />
  );
}

const estilos = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
   justifyContent: 'center',
   margin: 10,
   marginTop: 15
  },
  item:{
    backgroundColor: '#9BF2EA',
    padding: 20,
    marginTop: 5,
    marginVertical: 8,
    borderRadius: 10,
  },
  titulo: {
    fontSize: 24,
    marginLeft: 10,
  },
  tituloImagem: {
    flexDirection: 'row',
  },
  info: {
    flexDirection: 'column',
    fontSize: 16,
  },
  imagem: {
    width: 40,
    height: 40,
  }
});




import { FlatList, StyleSheet, Text, View, Image } from 'react-native';

import tarefas from '../mocks/Tarefas';

export default function App() {

  const renderizarItem = ({ item }) => (
    
    <View style={estilos.item}>
      <View style={estilos.tituloImagem}>
        <Image style={estilos.imagem} source={item.imagem}/>
        <Text style={estilos.titulo}>{item.nome}</Text>
      </View> 
      <Text style={estilos.info}>{item.descricao}</Text>
    </View>
  );

  return (
    <View style={estilos.container}>
      <FlatList
        data={tarefas}//dados que vão preencher a lista
        renderItem={renderizarItem}
        keyExtractor={item => item.id}
      />
    </View>
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




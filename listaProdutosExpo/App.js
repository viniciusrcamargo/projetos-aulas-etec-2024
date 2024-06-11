import { StyleSheet, View, ScrollView } from 'react-native';

import Topo from './src/componentes/Topo';
import Lista from './src/componentes/Lista';
import produtos from './src/mock/Produtos'


export default function App() {
  return (
    <View style={estilos.container}>
      <Topo />
      <Lista produtos={produtos}/>
    </View>

  );
}

const estilos = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
  },
});

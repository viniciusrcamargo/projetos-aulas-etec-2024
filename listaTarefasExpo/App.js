import { StyleSheet, View } from 'react-native';

import Topo from './src/componentes/Topo';
import Lista from './src/componentes/Lista';

export default function App() {
  return (
    <>
      <Topo />
      <View style={estilos.container}>
          <Lista />
      </View>
   </> 
  );
}

const estilos = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});

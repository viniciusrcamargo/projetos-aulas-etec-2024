import { View, StyleSheet, Text } from 'react-native';


export default function Topo(){
    return(
        <View style={estilos.cabecalho}>
            <Text style={estilos.titulo}>Farmácia da Etec</Text>
        </View>
    );
}

const estilos = StyleSheet.create({
    cabecalho:{
        backgroundColor: '#044040',
        width: '100%',
        padding: 25,
    }, 
    titulo: {
        fontSize: 20,
        fontWeight: 'bold',
        textAlign: 'center',
        color: '#fff'
    }
});




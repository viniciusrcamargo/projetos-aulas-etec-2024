import { View, Image, StyleSheet, Text } from 'react-native';

import Logo from '../../assets/lista.png';

export default function Topo(){
    return(
        <View style={estilos.cabecalho}>
            <Image source={Logo} style={estilos.imagem}/>
            <Text style={estilos.titulo}>lista de Tarefas</Text>
        </View>
    );
}

const estilos = StyleSheet.create({
    cabecalho:{
        backgroundColor: '#f0f0f0',
        flexDirection: 'row',
        padding: 25,
    }, 
    imagem: {
        top: 7,
        width: 45,
        height: 45,
    }, 
    titulo: {
        fontSize: 20,
        fontWeight: 'bold',
        lineHeight: 26,
        marginLeft: 55,
        top: 20,
    }
});




import React from "react";
import {View, Image, Text, StyleSheet } from 'react-native';

const Produto = (props) => {
    return(
        <View style={estilos.produto}>
            <Image source={props.imagem} style={estilos.imagem}/>
            <View>
                <Text style={estilos.nome}>{props.nome}</Text>
                <Text style={estilos.preco}>{'R$ ' + props.preco}</Text>
            </View>
        </View>
    );
}

const estilos = StyleSheet.create({
    produto:{
        padding: 10,
        margin: 10,
        width: 380,
        borderRadius: 10,
        backgroundColor: '#F2B749',
        flexDirection: 'row',
        alignItems: 'center',
    },
    imagem:{
        width: 100,
        height: 100,
    },
    texto:{
        flexDirection: 'column'
    },
    nome:{
        fontSize: 38,
        color: 'blue',
        lineHeight: 38,
        marginLeft: 20
    },
    preco:{
        fontSize: 25,
        color: 'red',
        margin: 20
    }
});

export default Produto;

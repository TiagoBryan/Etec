/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.exemplolampada;

/**
 *
 * @author dti
 */

//Criação da class lampada
public class Lampada {
    
    //Definição do estado da lampada
    private String estadoDaLampada = "Apagada";
    
    //Método de acender a lampada
    public void acende(){
        estadoDaLampada = "Acesa";
    } 
    //Método de apagar a lampada
     public void apaga(){
        estadoDaLampada = "Apagada";
    } 
     //Método de mostrar o estado da lampada
     public void mostraEstado(){
        if (estadoDaLampada.equals("Acesa")){
            System.out.println("Está acesa!");
        }else{
            System.out.println("Esta apagada!");
        }
    } 
}

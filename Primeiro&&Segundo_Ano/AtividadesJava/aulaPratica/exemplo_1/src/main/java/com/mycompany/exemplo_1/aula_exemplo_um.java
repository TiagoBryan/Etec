/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

//pacote do projeto
package com.mycompany.exemplo_1;


//Importar classe com a tela grafica
import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */

//Criação da class 
public class aula_exemplo_um {
    
    //metodo principal com a chamada do método
    public static void main(String[] args){
    digite(); 
            
    }
    //método de recolher os dados
    static void digite(){
        int a;
        a = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero"));
        dobro(a);
        
    }
    //metodo de calcular o dobro
    static void dobro(int n){
        int d = n * 2;
        JOptionPane.showMessageDialog(null, "Dobro de "+n+" é "+ d);
    }
}

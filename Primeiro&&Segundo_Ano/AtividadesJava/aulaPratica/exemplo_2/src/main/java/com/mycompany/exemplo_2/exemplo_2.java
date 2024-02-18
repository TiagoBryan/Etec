/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */


//pacote do projeto
package com.mycompany.exemplo_2;


//Importar classe com a tela grafica
import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */

//Criação da class 
public class exemplo_2 {
    
        //metodo principal com a chamada do método
        public static void main(String[] args){
            digite();
        
        }
        
        //método de recolher os dados
        static void digite(){
            
            String p = JOptionPane.showInputDialog(null, "Digite uma palavra");
            int t = tamanho(p);
            JOptionPane.showMessageDialog(null, p+ " possui "+t+" caracteres");
        }
        
        //metodo de contar os caracteres
        static int tamanho(String x){
            return x.length();
        }
}

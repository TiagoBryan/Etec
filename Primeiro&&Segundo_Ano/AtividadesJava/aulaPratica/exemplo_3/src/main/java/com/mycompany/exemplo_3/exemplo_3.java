/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

//pacote do projeto
package com.mycompany.exemplo_3;


//Importar classe com a tela grafica
import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */

//Criação da class 
public class exemplo_3 {
    
    
    //metodo principal que recolhe os dados e exibe o resultado puxando um método
    public static void main(String[] args){
        int idade1, idade2;
        String nome1, nome2;
        
        nome1= JOptionPane.showInputDialog("Digite o nome da 1ª pessoa: ");
        idade1 = Integer.parseInt(JOptionPane.showInputDialog("Digite a idade da 1ª pessoa: "));
        
        nome2= JOptionPane.showInputDialog("Digite o nome da 2ª pessoa: ");
        idade2 = Integer.parseInt(JOptionPane.showInputDialog("Digite a idade da 2ª pessoa: "));
        
        String texto = PessoaMaisVelha(nome1, idade1, nome2, idade2);
        JOptionPane.showMessageDialog(null, texto);
    }
    
    //Método que compara qaul é a pessoa mais velha
    static String PessoaMaisVelha(String n1, int id1, String n2, int id2){
        if(id1> id2){
            return n1 + " é a pessoa mais velha";
        }else{
            if(id2> id1){
                return n2 + " é a pessoa mais velha";
            }else{
                return n1 + " e "+n2+" tem a mesma idade";
            }
        }
    }


}
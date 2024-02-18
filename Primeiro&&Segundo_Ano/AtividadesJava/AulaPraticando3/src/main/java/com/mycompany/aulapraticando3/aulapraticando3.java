/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.aulapraticando3;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */

//Criação da class aulapraticando3
public class aulapraticando3 {
    //Metodo Principal que faz a chamada do metodo lerNota
    public static void main(String[] args){
        lerNota();
    
    }
    //fim método principal
    
    //Método para ler a nota do aluninho
    static void lerNota(){
        double n1, n2;
        String nome;
        nome = JOptionPane.showInputDialog(null, "Digite um nome: ");
            n1 = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite a primeira Nota"));
            n2 = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite a segunda Nota"));
            JOptionPane.showMessageDialog(null, nome);
            calcularMedia(n1,n2);
            
    }
    //Fim do metodo de ler a nota
    
    //Método privado para calcular a media das notas do aluninho
    private static void calcularMedia(double a1, double a2){
        double md;
        md =(a1+a2)/2;
        if (md<=3){
            JOptionPane.showMessageDialog(null, "Retido com media "+md);
        }else{
            if((md<=7) && (md>3)){
                JOptionPane.showMessageDialog(null, "Recuperação com média "+md);
            }else{
                JOptionPane.showMessageDialog(null, "Aprovado com media "+md);
            }
        }
    }
    //Fim do metodo privado que calcula a media das notas do aluninho
}
//Fim da class aulaparticando3

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.aulapraticando4;

import java.text.DecimalFormat;
import java.util.Scanner;

/**
 *
 * @author dti
 */
//Criação da class AulaPraticando4
public class AulaPraticando4 {
    //Metodo Principal que calcula a média das notas digitadas 
    public static void main(String args[]){
        Scanner entrada = new Scanner(System.in);
        byte n = 0;
        double nota, soma = 0;
        double media;
        System.out.println("Nota do aluno, -1 termina: ");
        nota = entrada.nextInt();
        while (nota != -1){
            soma = soma + nota;
            n = (byte) (n+1);
            System.out.print("Nota do aluno, -1 termina: ");
            nota = entrada.nextInt();
        }
        DecimalFormat df = new DecimalFormat("0.00");
        if (n != 0){
            media = soma / n;
            System.out.print("Média igual a " + df.format(media));
            
        }else{
           System.out.print("Nenhuma nota foi digitada"); 
        }
    
    
    }
    //Fim Método principal
}
//Fim da class AulaPraticando4

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.exemplo_4;

import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */
public class exemplo_4 {
   public static void main(String[] args){
       int num;
       num= Integer.parseInt(JOptionPane.showInputDialog("Entre com um número: "));
       
       if(RestoporDois(num) == 0){
           JOptionPane.showMessageDialog(null, "O numero é par. \n");
       }else{
           JOptionPane.showMessageDialog(null, "O numero é Impar. \n");
       }
   }
   
   static int RestoporDois(int a){
       return a % 2;
   }
}

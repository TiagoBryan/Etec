/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.atividadeaula3;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */
public class atividadeAula3 {
    public static void main(String[] args) {
        float x = 0; float n = 0; float resultado = 0;
        x = Integer.parseInt(JOptionPane.showInputDialog("Digite o valor x: "));
        n = Integer.parseInt(JOptionPane.showInputDialog("Digite o valor n: "));
        resultado = (x*n)*(x*n);
        JOptionPane.showMessageDialog(null, "O resultado da equação é " + resultado);
    }
}

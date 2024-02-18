/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.atividadeaula1;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */
public class AtividadeAula1 {
    public static void main(String[] args) {
        int a = 0; int b =0; int c =0; int d =0; int r = 0;
        a = Integer.parseInt(JOptionPane.showInputDialog("Digite o 1° número: "));
        b = Integer.parseInt(JOptionPane.showInputDialog("Digite o 2° número: "));
        c = Integer.parseInt(JOptionPane.showInputDialog("Digite o 3° número: "));
        d = Integer.parseInt(JOptionPane.showInputDialog("Digite o 4° número: "));
        r = (a*b) + (a*c) + (a*d);
        JOptionPane.showMessageDialog(null, "O resultado foi " + r);
        
    }
}

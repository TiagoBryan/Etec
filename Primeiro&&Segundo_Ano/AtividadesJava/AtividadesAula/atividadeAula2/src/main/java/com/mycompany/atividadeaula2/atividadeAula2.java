/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.atividadeaula2;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */
public class atividadeAula2 {
    public static void main(String[] args) {
        int nascimento = 0; int idadeatual = 0; int idadefutura = 0;
        nascimento = Integer.parseInt(JOptionPane.showInputDialog("Digite seu ano de nascimento: "));
        idadeatual = 2023 - nascimento;
        idadefutura = 2050 - nascimento;
        JOptionPane.showMessageDialog(null, "Sua idade atual é " + idadeatual);
        JOptionPane.showMessageDialog(null, "Sua idade em 2050 será " + idadefutura);
        
    }
}

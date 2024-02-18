/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.aulapraticando;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */
public class Principal {
    public static void main (String[] args){
        Usuario usuario1 = new Usuario();
        usuario1.provarExistencia();
        usuario1.nome = "Tiaguinho_da_goiaba";
        usuario1.email = "tiaguin@gmail.com";
        usuario1.login = "Tiaguin";
        usuario1.senha = "Tiaguin369";
        
        JOptionPane.showMessageDialog(null, usuario1.nome);
        JOptionPane.showMessageDialog(null, usuario1.email);
        JOptionPane.showMessageDialog(null, usuario1.login);
        JOptionPane.showMessageDialog(null, usuario1.senha);
       
        
        System.out.println(usuario1.nome);
        System.out.println(usuario1.email);
        System.out.println(usuario1.login);
        System.out.println(usuario1.senha);
    
    }
}

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.atividadeaula4;

import javax.swing.JOptionPane; // Esse comando importa a interface gráfica para recolher os dados do usuario. 

/**
 *
 * @author dti
 */
public class AtividadeAula4 { //Criando ou declarando a classe AtividadeAula4 
    public static void main(String[] args)//Pacote de extensão do núcleo de java
    {
        
        //Esse bloco inicializa as variáveis e atribui o valor delas com base no que o usuario digitar. Utilizamos a interface gráfica importada, para recolher esses valores.
        double n1 = 0, n2 = 0, n3 = 0, n4 = 0, md = 0;
        String des = "";
        n1 = Double.parseDouble(JOptionPane.showInputDialog("Digite a primeira nota: "));
        n2 = Double.parseDouble(JOptionPane.showInputDialog("Digite a segunda nota: "));
        n3 = Double.parseDouble(JOptionPane.showInputDialog("Digite a terceira nota: "));
        n4 = Double.parseDouble(JOptionPane.showInputDialog("Digite a quarta nota: "));
        
        //Com base nos valores recolhidos, a variavel md aramazena a média desses valores
        md = (n1+n2+n3+n4)/4;
        
        //Através de uma estrutura de condição, nós conferimos qual classificação a media do usuario pertence, e armazena esse resultado na variável 'des'
        if(md >= 6){
            des = "Aprovado";
        }else{
        
            if((md > 3) && (md < 6)){
            
                des = "Exame";
            }else{
                des = "Reprovado";
            }
        }
        //Exibe a media do usuario e sua classificação através da interface gráfica importada no começo do código.
        JOptionPane.showMessageDialog(null, "Sua media foi " + md+" classificação: "+des);
        
    }//Fim do método main
}//Fim da Classe

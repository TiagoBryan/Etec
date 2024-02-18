/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.automotivo;

import javax.swing.JOptionPane;

/**
 *
 * @author dti
 */

//Criação da class Automotivo
public class Automotivo {
    //Declaração das variaveis 
    private String modelo;
    private String marca;
    private Integer ano;
    private String cor;
    
    //Método construtor
    public Automotivo(){
        this("", "", 0, "");
    }
    //Referencial com parametros desse método construtor
    public Automotivo(String modelo, String marca, Integer ano, String cor){
        this.modelo = modelo;
        this.marca = marca;
        this.ano = ano;
        this.cor = cor;
        
    }

    /**
     * @return the modelo
     */
    
    //Métodos GETs e SETs
    public String getModelo() {
        return modelo;
    }

    /**
     * @param modelo the modelo to set
     */
    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    /**
     * @return the marca
     */
    public String getMarca() {
        return marca;
    }

    /**
     * @param marca the marca to set
     */
    public void setMarca(String marca) {
        this.marca = marca;
    }

    /**
     * @return the ano
     */
    public Integer getAno() {
        return ano;
    }

    /**
     * @param ano the ano to set
     */
    public void setAno(Integer ano) {
        this.ano = ano;
    }

    /**
     * @return the cor
     */
    public String getCor() {
        return cor;
    }

    /**
     * @param cor the cor to set
     */
    public void setCor(String cor) {
        this.cor = cor;
    }
    
    
    //Método para exibir as informações
    public void provarExistencia(){
        //System.out.println("Modelo: "+ this.getModelo());
        //System.out.println("Marca: "+ this.getMarca());
        //System.out.println("Ano: "+ this.getAno());
        //System.out.println("Cor: "+ this.getCor());
        
        JOptionPane.showMessageDialog(null, "Modelo: " + this.getModelo() + "\n Marca: "
        + this.getMarca() + "\n Ano: " + this.getAno() + "\n Cor: " + this.getCor());
        
        // JOptionPane.showMessageDialog(null, "Marca: "+ this.getMarca());
        // JOptionPane.showMessageDialog(null, "Ano: "+ this.getAno());
        // JOptionPane.showMessageDialog(null, "Cor: "+ this.getCor());
    
    
    }
    
    //Método para receber as informações
    public void entraDados(){
        String modelo = JOptionPane.showInputDialog("Modelo: ");
        setModelo(modelo);
        marca = JOptionPane.showInputDialog("Marca: ");
        setMarca(marca);
        ano = Integer.parseInt(JOptionPane.showInputDialog("Ano: "));
        setAno(ano);
        String cor = JOptionPane.showInputDialog("cor: "); 
        setCor(cor);
    }
    
    //Metodo Principal que faz a chamada de todos os outros métodos
    public static void main (String[] args){
        
        Automotivo autol;
        autol = new Automotivo();
        autol.entraDados();
        autol.provarExistencia();
    }
    
    
}


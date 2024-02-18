// C++ code


// Grupo A
const int ledVerdeA = 13;
const int ledAmareloA = 12;
const int ledVermelhoA = 11;


const int DELAY_BLINK = 500; 

// Grupo B
const int ledsGrupoB[] = {6, 5, 4, 3, 2, 1, 0};
const int numLedsGrupoB = 7;

void setup() {
  
  pinMode(ledVerdeA, OUTPUT);
  pinMode(ledAmareloA, OUTPUT);
  pinMode(ledVermelhoA, OUTPUT);
  for (int i = 0; i < numLedsGrupoB; i++) {
    pinMode(ledsGrupoB[i], OUTPUT);
  }
}



void loop() {
  // Ciclo 1
randomSeed(analogRead(0));
 
  for (int i = 0; i < 10; i++) { 
    digitalWrite(13, HIGH);
    int led = random(0, numLedsGrupoB); 
    digitalWrite(ledsGrupoB[led], HIGH); 
    delay(DELAY_BLINK); 
    digitalWrite(ledsGrupoB[led], LOW); 
    delay(DELAY_BLINK); 
}
digitalWrite(13, LOW);
  	
    
   for (int i = 0; i < 3; i++) {
  
 
    
    digitalWrite(ledAmareloA, HIGH);

  
    for (int j = 0; j < numLedsGrupoB; j++) {
      digitalWrite(ledsGrupoB[j], HIGH);
      delay(500);
    }

  
    for (int j = 0; j < numLedsGrupoB; j++) {
      digitalWrite(ledsGrupoB[j], LOW);
      
    }
    
     delay(500);
   }
  digitalWrite(ledAmareloA, LOW);

  // Ciclo 2
  for (int i = 0; i < 3; i++) {
    
    digitalWrite(ledVermelhoA, HIGH);

   
    for (int j = 0; j < 5; j++) {
      for (int k = 0; k < numLedsGrupoB; k++) {
        digitalWrite(ledsGrupoB[k], HIGH);
      }
      delay(500);
      for (int k = 0; k < numLedsGrupoB; k++) {
        digitalWrite(ledsGrupoB[k], LOW);
      }
      delay(500);
    }

    
    for (int j = 0; j < numLedsGrupoB; j++) {
      digitalWrite(ledsGrupoB[j], LOW);
    }
    delay(10000);

    
  }
  digitalWrite(ledVermelhoA, LOW);
  delay(1000);
}
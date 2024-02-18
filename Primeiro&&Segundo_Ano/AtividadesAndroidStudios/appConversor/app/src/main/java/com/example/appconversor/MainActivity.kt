package com.example.appconversor

import android.os.Bundle
import android.provider.MediaStore.Audio.Radio
import android.widget.Button
import android.widget.EditText
import android.widget.RadioButton
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Modifier
import androidx.compose.ui.tooling.preview.Preview
import com.example.appconversor.ui.theme.AppConversorTheme

class MainActivity : ComponentActivity() {
    //declarando as variaveis que serão utilizadas
    lateinit var editText: EditText
    lateinit var celsiusRadio: RadioButton
    lateinit var fahreiheitRadioButton: RadioButton
    lateinit var converterButton: Button


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        editText = findViewById(R.id.valorTemp) as EditText

        celsiusRadio = findViewById(R.id.celsiusRadio) as RadioButton
        fahreiheitRadioButton = findViewById(R.id.fahreinheitRadio)as RadioButton
        converterButton = findViewById(R.id.converterButton) as Button
        converterButton.setOnClickListener { converter() }

    }
    fun converter(){
        var temp: Double = editText.text.toString().toDouble()
        if (celsiusRadio.isChecked){
            temp = (temp -32)*5/9

        }else if (fahreiheitRadioButton.isChecked){

            temp = temp*9/5+32
        }
        editText.setText(temp.toString())
    }
}


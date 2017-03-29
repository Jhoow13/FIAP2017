package br.com.fiap.nac01;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class ImcActivity extends AppCompatActivity {

    private EditText edtPeso, edtAltura;
    private TextView tvResultado;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_imc);
        edtPeso = (EditText) findViewById(R.id.edtPeso);
        edtAltura = (EditText) findViewById(R.id.edtAltura);
        tvResultado = (TextView) findViewById(R.id.tvResultado);
    }


    public void calcular(View v){

        if(!TextUtils.isEmpty(edtPeso.getText()) && !TextUtils.isEmpty(edtAltura.getText())) {

            float peso, altura;
            float resultado;
            boolean res = false;
			
			// Podemos utilizar Try Catch e substituir pela lógica do isEmpty
            peso = (Float) Float.parseFloat(String.valueOf(edtPeso.getText()));
            altura = (Float) Float.parseFloat(String.valueOf(edtAltura.getText()));

            if(peso <= 0 || altura <= 0){
                Toast.makeText(this, R.string.validacao_zero, Toast.LENGTH_SHORT).show();
                return;
            }

            resultado = peso / (altura*altura);

            if(resultado <16){
                tvResultado.setText(R.string.magreza_grave);
            }else if(resultado<17){
                tvResultado.setText(R.string.magreza_moderada);
            }else if(resultado <18.5){
                tvResultado.setText(R.string.magreza_leve);
            }else if(resultado < 25){
                tvResultado.setText(R.string.saudavel);
            }else if(resultado <30){
                tvResultado.setText(R.string.sobrepeso);
            }else if(resultado < 35){
                tvResultado.setText(R.string.obesidade_grau1);
            }else if(resultado <40){
                tvResultado.setText(R.string.obesidade_grau2);
            }else{
                tvResultado.setText(R.string.obesidade_grau3);
            }

        }else{
            Toast.makeText(this, R.string.validacao_vazio, Toast.LENGTH_SHORT).show();
        }
    }
    
}

package br.com.fiap.revisaonac;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import org.w3c.dom.Text;

public class CalculoImc extends AppCompatActivity {

    //iniciar as variaveis DE ACORDO COM O TIPO DE OBJETO DESEJADO
    private EditText edtAltura,edtPeso;
    private TextView tvResultado;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculo_imc);

        //pegar os valores dos OBJETOS PELO ARQUIVO R, NAO ESQUECER DO CAST
        edtAltura = (EditText) findViewById(R.id.txtAltura);
        edtPeso = (EditText) findViewById(R.id.txtPeso);
        tvResultado = (TextView) findViewById(R.id.txtResultado);
    }

    //criar o metodo para passando o VIEW V como parametro para encontrar os objetos
    public void calcularIMC(View v){
        float resultado,peso,altura;

        if(TextUtils.isEmpty(edtAltura.getText()) || TextUtils.isEmpty(edtPeso.getText())){
            Toast.makeText(this, "digite numeros", Toast.LENGTH_SHORT).show();
            return;
        };


            peso = Float.parseFloat(edtPeso.getText().toString());
            altura = Float.parseFloat(edtAltura.getText().toString());

            if (peso <= 0 || altura <=0){
                Toast.makeText(this, "digite valores maiores que zero", Toast.LENGTH_SHORT).show();
                return;
            }

            resultado = peso / (altura*altura);

            if (resultado < 16){
                tvResultado.setText("Magreza grave");
            }else if (resultado < 17){
                tvResultado.setText("magreza moderada");
            }else if (resultado < 18.5){
                tvResultado.setText("magreza leva");
            }else if (resultado < 25){
                tvResultado.setText("saudavel");
            }else if (resultado < 30){
                tvResultado.setText("sobrepeso");
            }else if (resultado < 35){
                tvResultado.setText("Obesidade grau 1");
            }else if (resultado < 40){
                tvResultado.setText("Obesidade grau 2");
            }else {
                tvResultado.setText("Obesidade grau 3");
            }
    }
}

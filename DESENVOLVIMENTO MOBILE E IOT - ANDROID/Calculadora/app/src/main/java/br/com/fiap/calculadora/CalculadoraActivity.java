package br.com.fiap.calculadora;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class CalculadoraActivity extends AppCompatActivity {

    EditText numero1, numero2;
    TextView tvResultado;
    String operacao;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);

        numero1 = (EditText) findViewById(R.id.tvNumero1);
        numero2 = (EditText) findViewById(R.id.tvNumero2);
        tvResultado = (TextView) findViewById(R.id.tvResultado);
    }


    public String defineOperacao(View v){

        switch (v.getId()) {
            case R.id.btnSoma:
                operacao = "soma";
                break;
            case R.id.btnSubtracao:
                operacao = "subtracao";
                break;
            case R.id.btnMultiplicacao:
                operacao = "multiplicacao";
                break;
            case R.id. btnDivisao:
                operacao = "divisao";
                break;
            default:
                operacao = "";
                break;
        }

        return operacao;
    }

    public void realizarConta(View v){

        int resultado = 0;

        switch (operacao){
            case "soma":
                int soma = Integer.parseInt(numero1.getText().toString()) + Integer.parseInt(numero2.getText().toString());
                tvResultado.setText(String.valueOf(soma));
                break;
            case "subtracao":
                int subtracao = Integer.parseInt(numero1.getText().toString()) - Integer.parseInt(numero2.getText().toString());
                tvResultado.setText(String.valueOf(subtracao));
                break;
            case "multiplicacao":
                int multiplicacao = Integer.parseInt(numero1.getText().toString()) * Integer.parseInt(numero2.getText().toString());
                break;
            case "divisao":
                int divisao = Integer.parseInt(numero1.getText().toString()) / Integer.parseInt(numero2.getText().toString());
                break;
        }


    }
}

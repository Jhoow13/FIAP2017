package br.com.fiap.calculadora;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class CalculadoraActivity extends AppCompatActivity implements View.OnClickListener{

    EditText numero1, numero2;
    TextView tvResultado;
    Button btnSoma, btnSubtracao, btnMultiplicacao, btnDivisao;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);
        numero1 = (EditText) findViewById(R.id.tvNumero1);
        numero2 = (EditText) findViewById(R.id.tvNumero2);
        tvResultado = (TextView) findViewById(R.id.tvResultado);

        btnSoma = (Button) findViewById(R.id.btnSoma);
        btnSoma.setOnClickListener(this);

        btnSubtracao = (Button) findViewById(R.id.btnSubtracao);
        btnSubtracao.setOnClickListener(this);

        btnMultiplicacao = (Button) findViewById(R.id.btnMultiplicacao);
        btnMultiplicacao.setOnClickListener(this);

        btnDivisao = (Button) findViewById(R.id.btnDivisao);
        btnDivisao.setOnClickListener(this);
    }

    public void onClick(View v){
        int resultado;
        if (v == btnSoma){
            resultado = Integer.parseInt(numero1.getText().toString()) + Integer.parseInt(numero2.getText().toString());
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnSubtracao){
            resultado = Integer.parseInt(numero1.getText().toString()) - Integer.parseInt(numero2.getText().toString());
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnMultiplicacao){
            resultado = Integer.parseInt(numero1.getText().toString()) * Integer.parseInt(numero2.getText().toString());
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnDivisao){
            resultado = Integer.parseInt(numero1.getText().toString()) / Integer.parseInt(numero2.getText().toString());
            tvResultado.setText(String.valueOf(resultado));
        }
    }

    public void limpar(View v){
        numero1.setText("0");
        numero2.setText("0");
        tvResultado.setText("0");

    }
}

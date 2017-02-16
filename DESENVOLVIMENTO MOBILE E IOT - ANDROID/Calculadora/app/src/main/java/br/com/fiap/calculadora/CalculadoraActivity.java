package br.com.fiap.calculadora;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class CalculadoraActivity extends AppCompatActivity {

    EditText numero1, numero2;
    TextView tvResultado;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);

        numero1 = (EditText) findViewById(R.id.tvNumero1);
        numero2 = (EditText) findViewById(R.id.tvNumero2);
        tvResultado = (TextView) findViewById(R.id.tvResultado);

    }

    public void realizarConta(View v){
        int resultado = Integer.parseInt(numero1.getText().toString()) + Integer.parseInt(numero2.getText().toString());

        tvResultado.setText(String.valueOf(resultado));
    }
}

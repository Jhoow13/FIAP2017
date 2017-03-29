package br.com.fiap.contador;

import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class ContadorActivity extends AppCompatActivity {

    TextView  tvValor;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_contador);

        tvValor = (TextView) findViewById(R.id.tvResultado);
    }

    public void somar(View v){
        int val = Integer.parseInt(tvValor.getText().toString());
        val++;

        tvValor.setText(String.valueOf(val));
    }

    public void subtrair(View v){
        int val = Integer.parseInt(tvValor.getText().toString());
        val--;

        tvValor.setText(String.valueOf(val));
    }

    public void zerar(View v){
        tvValor.setText(0);
    }

    public void calcular(View v){
        int val = Integer.parseInt(tvValor.getText().toString());

        switch (v.getId()){
            case R.id.btnMais:
                val++;
                break;
            case R.id.btnMenos:
                val--;
                break;
            case R.id.btnZerar:
                val = 0;
                Toast.makeText(this, "Contador Zerado!", Toast.LENGTH_SHORT).show();
                break;
        }
        tvValor.setText(String.valueOf(val));
    }
}

package br.com.fiap.calculadora;

import android.support.v4.text.TextUtilsCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextUtils;
import android.text.TextWatcher;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class CalculadoraActivity extends AppCompatActivity implements View.OnClickListener{

    EditText edtValor1, edtValor2;
    TextView tvResultado;
    Button btnSoma, btnSubtracao, btnMultiplicacao, btnDivisao;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);
        edtValor1 = (EditText) findViewById(R.id.tvNumero1);
        edtValor2 = (EditText) findViewById(R.id.tvNumero2);
        tvResultado = (TextView) findViewById(R.id.tvResultado);

        btnSoma = (Button) findViewById(R.id.btnSoma);
        btnSoma.setOnClickListener(this);

        btnSubtracao = (Button) findViewById(R.id.btnSubtracao);
        btnSubtracao.setOnClickListener(this);

        btnMultiplicacao = (Button) findViewById(R.id.btnMultiplicacao);
        btnMultiplicacao.setOnClickListener(this);

        btnDivisao = (Button) findViewById(R.id.btnDivisao);
        btnDivisao.setOnClickListener(this);


        edtValor1.addTextChangedListener(edtWatcher);
        edtValor2.addTextChangedListener(edtWatcher);


    }

    public void onClick(View v){
        float resultado = 0.0f;
        float valor1 = 0;
        float valor2 = 0;

        if(TextUtils.isEmpty(edtValor1.getText().toString()) ||
                TextUtils.isEmpty(edtValor2.getText().toString())){
            Toast.makeText(this, getText(R.string.msg_validacao), Toast.LENGTH_SHORT).show();
            return;
        }

        try {
            valor1 = Float.parseFloat(edtValor1.getText().toString().replace(',','.'));
            valor2 = Float.parseFloat(edtValor2.getText().toString().replace(',','.'));
        }catch(NumberFormatException nfe){
            Toast.makeText(this,getText(R.string.parametro_invalido), Toast.LENGTH_SHORT).show();
            return;
        }

        if (v == btnSoma){
            resultado = valor1 + valor2;
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnSubtracao){
            resultado = valor1 - valor2;
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnMultiplicacao){
            resultado = valor1 * valor2;
            tvResultado.setText(String.valueOf(resultado));
        }
        else if(v == btnDivisao){
            resultado = valor1 / valor2;
            tvResultado.setText(String.valueOf(resultado));
        }
    }

    public void limpar(View v){
        edtValor1.setText("");
        edtValor2.setText("");
    }

    private final TextWatcher edtWatcher = new TextWatcher() {
        String textoAnterior;

        @Override
        public void beforeTextChanged(CharSequence s, int start, int count, int after) {
            //Conteudo do objeto antes da ultima alteração feita pela digitação
            textoAnterior = s.toString();
        }

        @Override
        public void onTextChanged(CharSequence s, int start, int before, int count) {

        }

        @Override
        public void afterTextChanged(Editable s) {
            int contador= s.length() - s.toString().replace(",", "").length();

            if(contador>1 && edtValor1.getEditableText()==s){
                edtValor1.setText(textoAnterior);
                edtValor1.setSelection(edtValor1.getText().length());
            }else if(contador>1){
                edtValor2.setText(textoAnterior);
                edtValor2.setSelection(edtValor2.getText().length());
            }
        }

    };
}

package br.com.fiap.notes;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Patterns;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import java.util.HashMap;

import br.com.fiap.notes.util.ArquivoDB2;
import br.com.fiap.notes.util.arquivoDB;

public class CadastraLoginActivity extends AppCompatActivity {

    private EditText etNome, etSobrenome, etNascimento, etEmail, etSenha;
    private RadioGroup rdgSexo;
    private ArquivoDB2 arquivoDB;

    private final String ARQ = "dados.txt";
    private final String SP = "dados";
    private HashMap<String,String> mapDados;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastra_login);

        etNome = (EditText) findViewById(R.id.edtNome);
        etSobrenome = (EditText) findViewById(R.id.edtSobrenome);
        etNascimento = (EditText) findViewById(R.id.edtDataNascimento);
        etEmail = (EditText) findViewById(R.id.edtEmail);
        etSenha = (EditText) findViewById(R.id.edtSenha);
        rdgSexo = (RadioGroup) findViewById(R.id.rgSexo);

        arquivoDB = new ArquivoDB2();
        mapDados = new HashMap<>();
    }

    private boolean capturaDadosDaTela(){
        String nome, sobrenome, nascimento, email, senha, sexo;
        boolean dadosOk = false;

        nome = etNome.getText().toString();
        sobrenome = etSobrenome.getText().toString();
        nascimento = etNascimento.getText().toString();
        email = etEmail.getText().toString();
        senha = etSenha.getText().toString();

        //retorna id do RadioButton selecionado no RadioGroup
        int sexoId = rdgSexo.getCheckedRadioButtonId();
        RadioButton rbSexo = (RadioButton) findViewById(sexoId);

        //(sexoId != -1) quando nenhum RDB for selecionado o retorno
        // do metódo getCheckedRadioButtonId é negativo
        if(Patterns.EMAIL_ADDRESS.matcher(email).matches() &&
                !TextUtils.isEmpty(senha) &&
                !TextUtils.isEmpty(nome) &&
                !TextUtils.isEmpty(sobrenome) &&
                !TextUtils.isEmpty(nascimento) &&
                (sexoId != -1)){
            dadosOk = true;
            sexo = rbSexo.getText().toString();
            mapDados.put("usuario", email);
            mapDados.put("senha", senha);
            mapDados.put("nome", nome);
            mapDados.put("sobrenome", sobrenome);
            mapDados.put("nascimento", nascimento);
            mapDados.put("sexo", sexo);
        }else{
            Toast.makeText(this, R.string.dados_conta_nok, Toast.LENGTH_SHORT).show();
        }
        return dadosOk;
    }

    public void gravarChaves(){
        if(capturaDadosDaTela()){
            arquivoDB.gravarChaves(this, SP, mapDados);
            Toast.makeText(this, R.string.cadastro_ok, Toast.LENGTH_SHORT).show();
        }
    }

}

package br.com.fiap.notes;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Patterns;
import android.view.View;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

import java.io.FileNotFoundException;
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

    //valida a entrada de dados e popula o HashMap
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

    //grava o SP com o HashMap mapDados como parametro
    public void gravarChaves(View v){
        if(capturaDadosDaTela()){
            arquivoDB.gravarChaves(this, SP, mapDados);
            Toast.makeText(this, R.string.cadastro_ok, Toast.LENGTH_SHORT).show();
        }
    }

    //exclui o SP com o HashMap mapDados como parametro
    public void excluirChaves(View v){
        if(capturaDadosDaTela()){
            arquivoDB.excluirChaves(this, SP, mapDados);
            Toast.makeText(this, R.string.exclusao_ok, Toast.LENGTH_SHORT).show();
        }
    }

    //verifica se no SharedPreferences existem as chaves usuario e senha
    public boolean verificarChaves(View v){
        if(arquivoDB.verificarChave(this,SP,"usuario") && arquivoDB.verificarChave(this,SP,"senha")){
            Toast.makeText(this, R.string.dados_login_ok, Toast.LENGTH_SHORT).show();
            return true;
        }else {
            Toast.makeText(this, R.string.dados_login_nok, Toast.LENGTH_SHORT).show();
            return false;
        }
    }

    public void carregarChaves(View v){
            if(verificarChaves(v)){
                etNome.setText(arquivoDB.retornarValor(this, SP, "nome"));
                etSobrenome.setText(arquivoDB.retornarValor(this, SP, "sobrenome"));
                etNascimento.setText(arquivoDB.retornarValor(this, SP, "nascimento"));
                etEmail.setText(arquivoDB.retornarValor(this, SP, "usuario"));
                etSenha.setText(arquivoDB.retornarValor(this, SP, "senha"));

                String sexo = arquivoDB.retornarValor(this, SP, "sexo");

                if(sexo.equals(getString(R.string.feminino))){
                    rdgSexo.check(R.id.rbFeminino);
                }else{
                    rdgSexo.check(R.id.rbMasculino);
                }
        }
    }

    //metodo para gravar arquivo txt
    public void gravarArquivo(View v){
        if(capturaDadosDaTela()){
            try {
                arquivoDB.gravarArquivo(this, ARQ, mapDados.toString());
                Toast.makeText(this, R.string.gravar_arquivo_ok, Toast.LENGTH_SHORT).show();
            } catch (FileNotFoundException e) {
                e.printStackTrace();
                Toast.makeText(this, R.string.gravar_arquivo_nok, Toast.LENGTH_SHORT).show();
            }

        }
    }

    //metodo que le arquivo
    public void lerArquivo(View v){
        try {
            String txt = arquivoDB.lerArquivo(this, ARQ);
            Toast.makeText(this, txt, Toast.LENGTH_SHORT).show();
        } catch (FileNotFoundException e) {
            e.printStackTrace();
            Toast.makeText(this, R.string.ler_arquivo_nok, Toast.LENGTH_LONG).show();
        }
    }

    //metodo que exclui arquivo
    public void excluirArquivo(View v){
        try{
            arquivoDB.excluirArquivo(this,ARQ);
            Toast.makeText(this, R.string.excluir_arquivo_ok, Toast.LENGTH_SHORT).show();
        } catch (FileNotFoundException e) {
            e.printStackTrace();
            Toast.makeText(this, R.string.excluir_arquivo_nok, Toast.LENGTH_LONG).show();
        }
    }

    public void voltar(View v){
        finish();
    }

}

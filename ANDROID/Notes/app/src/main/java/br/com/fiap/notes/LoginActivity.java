package br.com.fiap.notes;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Patterns;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class LoginActivity extends AppCompatActivity {

    EditText edtEmail, edtSenha;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        edtEmail = (EditText) findViewById(R.id.edtEmail);
        edtSenha = (EditText) findViewById(R.id.edtSenha);
    }

    public void chamar(View v){
        if(validarLogin(edtEmail.getText().toString(), edtSenha.getText().toString())) {
            Intent toNotesActivity = new Intent(this, NotesActivity.class);
            startActivity(toNotesActivity);
        }else{
            Toast.makeText(this, R.string.erro_login, Toast.LENGTH_SHORT).show();
        }
    }

    private boolean validarLogin(String email, String senha){

        return Patterns.EMAIL_ADDRESS.matcher(email).matches()
                && !TextUtils.isEmpty(senha);
    }
}

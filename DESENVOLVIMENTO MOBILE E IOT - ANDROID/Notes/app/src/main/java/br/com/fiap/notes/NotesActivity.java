package br.com.fiap.notes;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class NotesActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notes);
    }

    public void voltar(View v){
        finish();
    }
}

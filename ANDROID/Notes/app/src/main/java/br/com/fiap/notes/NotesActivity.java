package br.com.fiap.notes;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

import java.util.ArrayList;
import java.util.Arrays;

import br.com.fiap.notes.util.CloudantRequestInterface;
import br.com.fiap.notes.util.CloudantResponseNota;
import br.com.fiap.notes.util.Row;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class NotesActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notes);
        loadJSON();
    }

    private void loadJSON(){
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl("https://ed24b4e0-0f1c-4a18-88f0-edd43148b199-bluemix.cloudant.com/fiap-notas/")
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        CloudantRequestInterface api = retrofit.create(CloudantRequestInterface.class);

        api.getAllJSON().enqueue(new Callback<CloudantResponseNota>() {
            @Override
            public void onResponse(Call<CloudantResponseNota> call, Response<CloudantResponseNota> response) {

                CloudantResponseNota json = response.body();
                ArrayList<Row> rows = new ArrayList<>(Arrays.asList(json.getRows()));

                for(Row item: rows){
                    Log.i("Nota: ", item.getDoc().toString());
                }
            }

            @Override
            public void onFailure(Call<CloudantResponseNota> call, Throwable t) {

            }
        });

    }

    public void voltar(View v) {
        finish();
    }
}

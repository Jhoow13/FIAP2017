package fiap.com.br.app;


import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;

import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;

import fiap.com.br.app.entity.People;
import fiap.com.br.app.util.PeopleRequestInterface;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class PeopleActivity extends AppCompatActivity {
    private People people;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_people);


    }

    public void loadJSON(){
        Retrofit retrofit = new Retrofit.Builder().baseUrl("http://swapi.co/api/")
                .addConverterFactory(GsonConverterFactory.create())
                .build();

       PeopleRequestInterface api = retrofit.create(PeopleRequestInterface.class);

        api.getAllJSON().enqueue(new Callback<People>() {
            @Override
            public void onResponse(Call<People> call, Response<People> response) {
                People json = response.body();
                String nome =json.getName().toString();
                Log.i("Pessoa",json.toString());

            }

            @Override
            public void onFailure(Call<People> call, Throwable t) {

            }
        });

    }




}

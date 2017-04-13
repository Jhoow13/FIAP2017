package br.com.fiap.notes.util;

import retrofit2.Call;
import retrofit2.http.GET;

public interface CloudantRequestInterface {

    @GET("_all_docs?include_docs=true")
    Call<CloudantResponseNota> getAllJSON();

}

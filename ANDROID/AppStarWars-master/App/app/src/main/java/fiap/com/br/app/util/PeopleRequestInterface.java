package fiap.com.br.app.util;
import fiap.com.br.app.entity.People;
import retrofit2.Call;
import retrofit2.http.GET;

/**
 * Created by logonrm on 24/05/2017.
 */

public interface PeopleRequestInterface {
    @GET("people/3")
    Call<People> getAllJSON();
}



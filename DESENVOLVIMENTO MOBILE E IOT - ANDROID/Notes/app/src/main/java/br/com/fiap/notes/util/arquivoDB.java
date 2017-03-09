package br.com.fiap.notes.util;

import android.content.Context;
import android.content.SharedPreferences;

import java.util.HashMap;
import java.util.Map;

public class arquivoDB {

    private SharedPreferences pref;

    public void gravarChaves(Context context, String prefName, HashMap<String, String> map){
        pref = context.getSharedPreferences(prefName, Context.MODE_PRIVATE);
        SharedPreferences.Editor e = pref.edit();
        for (Map.Entry<String, String> chave : map.entrySet()){
            e.putString(chave.getKey(), chave.getValue());
        }
        e.commit();
    }

    public String retornarValor(Context context, String prefName, String key){
        pref = context.getSharedPreferences(prefName, Context.MODE_PRIVATE);
        String valor = pref.getString(key, "");
        return valor;
    }

    public boolean verificarChave(Context context, String prefName, String key){
        pref = context.getSharedPreferences(prefName, Context.MODE_PRIVATE);
        return pref.contains(key);
    }

    public void excluirChaves(Context context, String prefName, HashMap<String, String> map){
        pref = context.getSharedPreferences(prefName, Context.MODE_PRIVATE);
        SharedPreferences.Editor e = pref.edit();
        for (Map.Entry<String, String> chave : map.entrySet()){
            e.remove(chave.getKey());
        }
        e.commit();
    }

}

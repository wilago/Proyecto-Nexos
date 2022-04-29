import { Injectable } from "@angular/core";
import { Storage } from "@ionic/storage";

@Injectable({
  providedIn: "root"
})
export class AuthenticateService {

 

  constructor(private storage: Storage) {}




  async loginUser(credential) {
        const user = await this.storage.get("user");

        var init = {
          // el método de envío de la información será POST
          method: "POST",
          headers: { // cabeceras HTTP
              // vamos a enviar los datos en formato JSON
              'Content-Type': 'application/json'
          },
          // el cuerpo de la petición es una cadena de texto
          // con los datos en formato JSON
          body: JSON.stringify(credential) // convertimos el objeto a texto
      };
        // se realiza el consumo de APi
        var response=await fetch('http://localhost:8000/api/login', init)
        if (response.ok) {
          
          var respuesta = await response.json();
          //Guardamos el token en el storage 
           this.storage.set("apiToken",respuesta.token);
           this.storage.set("userdata",respuesta.data);

          console.log(respuesta);

          return new Promise((accept, reject) => {
            if (respuesta.res) {
              accept("Login correcto");
            } else {
              reject("login incorrecto");
            }
          });
      } else {
          throw new Error(response.statusText);
      }
    } catch (err) {
      console.log("Error al realizar la petición AJAX: " + err.message);


  }
  registerUser(userData) {
    userData.password = btoa(userData.password);
    return this.storage.set("user", userData);
  }
}

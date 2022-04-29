import { Component } from "@angular/core";
import { Storage } from "@ionic/storage";


@Component({
  selector: "app-home",
  templateUrl: "home.page.html",
  styleUrls: ["home.page.scss"]
})
export class HomePage {

  cuentas=[
    {
        "id": 2,
        "ncuenta": 40109257,
        "tipo": 1,
        "saldo": 115486,
        "user_id": 3,
        "created_at": "2022-04-27T07:24:52.000000Z",
        "updated_at": "2022-04-27T07:24:52.000000Z"
    },
    {
        "id": 6,
        "ncuenta": 48394596,
        "tipo": 2,
        "saldo": 362915,
        "user_id": 3,
        "created_at": "2022-04-27T07:24:52.000000Z",
        "updated_at": "2022-04-27T07:24:52.000000Z"
    },
    {
        "id": 15,
        "ncuenta": 22940047,
        "tipo": 2,
        "saldo": 973612,
        "user_id": 3,
        "created_at": "2022-04-27T07:24:52.000000Z",
        "updated_at": "2022-04-27T07:24:52.000000Z"
    }
];

  constructor( private storage: Storage  ) {}


  qrscanner(){



   
  }
}

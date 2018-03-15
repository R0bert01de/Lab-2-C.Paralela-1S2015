import requests
import sys


def send_simple_message():
    return requests.post(
        "https://api.mailgun.net/v3/sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org/messages",
        auth=("api", "key-bccd075f02a12db1dee03a7710800a5d"),
        data={"from": "Cluster Marvel <postmaster@sandbox3761d267c8184fa2afb562ff83f8881e.mailgun.org>",
              "to": sys.argv[1],
              "subject": "Contacto Cluster Marvel",
              "text":
              "Nombre: " + sys.argv[2] + "\n" + "Email: " + sys.argv[5] + "\n" + "Telefono: "+ sys.argv[3] + "\n" + "Mensaje: " + sys.argv[4]})


print send_simple_message()

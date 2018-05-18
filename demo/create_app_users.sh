#!/bin/bash

cat utenti.txt | while read name; do echo "INSERT INTO utente (username, password, nome) VALUES ('$name', PASSWORD('$name'), '${name[@]^}');" | mysql esempio; done



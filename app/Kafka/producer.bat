@echo off

title Produzindo mensagem por meio de txt

C:
cd C:/kafka/bin/windows
kafka-console-producer.bat --bootstrap-server localhost:9092 --topic testTopic < C:/kafka/burno.txt
create database testeval owner tp;

create table Admin(
    id serial primary key,
    email varchar(100),
    mdp varchar (100)
);

create table Auteur(
    id serial primary key,
    nom varchar(100),
    prenom varchar(100),
    email varchar(100),
    mdp varchar(100)
);

create table Contenus(
    id serial primary key,
    titre varchar(100),
    description text,
    texte text,
    images text
);
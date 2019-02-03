CREATE DATABASE recipetit;

CREATE TABLE public.user
(
	id  SERIAL NOT NULL PRIMARY KEY,
	email VARCHAR(320) NOT NULL,
	name VARCHAR(24) NOT NULL,
	password VARCHAR(160) NOT NULL
);

CREATE TABLE public.recipe
(
	Id SERIAL NOT NULL PRIMARY KEY,
	User_Id INT NOT NULL references public.user(id),
	Name VARCHAR(24) NOT NULL,
	Cook_time INT NOT NULL,
	Oven_temp INT NOT NULL,
	Ingredients VARCHAR(160) NOT NULL,
	Instructions VARCHAR(160) NOT NULL
);

CREATE TABLE public.review
(
	Id SERIAL NOT NULL PRIMARY KEY,
	comments VARCHAR(160) NOT NULL,
	rating INT NOT NULL,
	Recipe_Id INT NOT NULL references public.recipe(id),
	User_Id INT NOT NULL references public.user(id)
);


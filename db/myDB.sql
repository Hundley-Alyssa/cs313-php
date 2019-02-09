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



INSERT INTO public.user(email, name, password)
VALUES ('testemail', 'testname', 'testpassword');

INSERT INTO public.user(email, name, password)
VALUES ('testemail1', 'testname1', 'testpassword1');

INSERT INTO public.user(email, name, password)
VALUES ('testemail2', 'testname2', 'testpassword2');

INSERT INTO public.user(email, name, password)
VALUES ('testemail3', 'testname3', 'testpassword3');



INSERT INTO public.recipe(user_id, name, cook_time, oven_temp, ingredients, instructions)
VALUES (1, 'Lemon Chicken Bake', 60, 385, 'chicken, lemons, flour, bread crumbs, cheese', 'put all ingredients together and bake');

INSERT INTO public.recipe(user_id, name, cook_time, oven_temp, ingredients, instructions)
VALUES (2, 'Brownie birthday cake', 35, 350, 'flour, chocolate, eggs, water, butter', 'put all ingredients together and bake');

INSERT INTO public.recipe(user_id, name, cook_time, oven_temp, ingredients, instructions)
VALUES (2, 'Vanilla birthday cake', 40, 350, 'flour, vanilla, eggs, water, butter', 'put all ingredients together and bake');

INSERT INTO public.recipe(user_id, name, cook_time, oven_temp, ingredients, instructions)
VALUES (3, 'Lemon Cookies', 15, 360, 'flour, lemon, eggs, water, butter', 'put all ingredients together and bake');

INSERT INTO public.recipe(user_id, name, cook_time, oven_temp, ingredients, instructions)
VALUES (4, 'Strawberry Ice cream', 10, 0, 'cream, milk, eggs, strawberry, vanilla', 'put all ingredients together and freeze for 10 hours');


INSERT INTO public.review(comments, rating, recipe_id, user_id)
VALUES ('this recipe needs more lemon', 3, 2, 1);

INSERT INTO public.review(comments, rating, recipe_id, user_id)
VALUES ('this recipe needs more chocolate', 3, 3, 2);

INSERT INTO public.review(comments, rating, recipe_id, user_id)
VALUES ('this recipe needs more vanilla', 3, 4, 2);

INSERT INTO public.review(comments, rating, recipe_id, user_id)
VALUES ('this recipe needs more lemon', 4, 5, 3);

INSERT INTO public.review(comments, rating, recipe_id, user_id)
VALUES ('this recipe needs more strawberry', 2, 6, 4);




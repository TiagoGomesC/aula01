--
-- PostgreSQL database dump
--

\restrict s1DCluh4hQlTxKmmBlyiSFSLz8eMrs0OXutpV6QgnvSyQfNhi8UyXiYAHoRZaln

-- Dumped from database version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.6 (Ubuntu 18.6-0ubuntu0.26.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: clientes; Type: TABLE; Schema: public; Owner: mesacinema
--

CREATE TABLE public.clientes (
    id integer NOT NULL,
    nome character varying(100) NOT NULL,
    email character varying(100),
    senha character varying(100) NOT NULL
);


ALTER TABLE public.clientes OWNER TO mesacinema;

--
-- Name: clientes_id_seq; Type: SEQUENCE; Schema: public; Owner: mesacinema
--

CREATE SEQUENCE public.clientes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.clientes_id_seq OWNER TO mesacinema;

--
-- Name: clientes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mesacinema
--

ALTER SEQUENCE public.clientes_id_seq OWNED BY public.clientes.id;


--
-- Name: filmes; Type: TABLE; Schema: public; Owner: mesacinema
--

CREATE TABLE public.filmes (
    id integer NOT NULL,
    titulo character varying(100) NOT NULL,
    genero character varying(50) NOT NULL,
    ano_lancamento integer,
    duracao integer
);


ALTER TABLE public.filmes OWNER TO mesacinema;

--
-- Name: filmes_id_seq; Type: SEQUENCE; Schema: public; Owner: mesacinema
--

CREATE SEQUENCE public.filmes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.filmes_id_seq OWNER TO mesacinema;

--
-- Name: filmes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mesacinema
--

ALTER SEQUENCE public.filmes_id_seq OWNED BY public.filmes.id;


--
-- Name: fotos_filmes; Type: TABLE; Schema: public; Owner: mesacinema
--

CREATE TABLE public.fotos_filmes (
    id integer NOT NULL,
    filme_id integer NOT NULL,
    nome_arquivo character varying(255) NOT NULL
);


ALTER TABLE public.fotos_filmes OWNER TO mesacinema;

--
-- Name: ingressos; Type: TABLE; Schema: public; Owner: mesacinema
--

CREATE TABLE public.ingressos (
    id integer NOT NULL,
    cliente_id integer,
    filme_id integer,
    data_ingresso timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE public.ingressos OWNER TO mesacinema;

--
-- Name: ingressos_id_seq; Type: SEQUENCE; Schema: public; Owner: mesacinema
--

CREATE SEQUENCE public.ingressos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.ingressos_id_seq OWNER TO mesacinema;

--
-- Name: ingressos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mesacinema
--

ALTER SEQUENCE public.ingressos_id_seq OWNED BY public.ingressos.id;


--
-- Name: sessoes; Type: TABLE; Schema: public; Owner: mesacinema
--

CREATE TABLE public.sessoes (
    id integer NOT NULL,
    filme_id integer,
    data_sessao timestamp without time zone NOT NULL,
    sala integer NOT NULL
);


ALTER TABLE public.sessoes OWNER TO mesacinema;

--
-- Name: sessoes_id_seq; Type: SEQUENCE; Schema: public; Owner: mesacinema
--

CREATE SEQUENCE public.sessoes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.sessoes_id_seq OWNER TO mesacinema;

--
-- Name: sessoes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mesacinema
--

ALTER SEQUENCE public.sessoes_id_seq OWNED BY public.sessoes.id;


--
-- Name: clientes id; Type: DEFAULT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.clientes ALTER COLUMN id SET DEFAULT nextval('public.clientes_id_seq'::regclass);


--
-- Name: filmes id; Type: DEFAULT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.filmes ALTER COLUMN id SET DEFAULT nextval('public.filmes_id_seq'::regclass);


--
-- Name: ingressos id; Type: DEFAULT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.ingressos ALTER COLUMN id SET DEFAULT nextval('public.ingressos_id_seq'::regclass);


--
-- Name: sessoes id; Type: DEFAULT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.sessoes ALTER COLUMN id SET DEFAULT nextval('public.sessoes_id_seq'::regclass);


--
-- Data for Name: clientes; Type: TABLE DATA; Schema: public; Owner: mesacinema
--

COPY public.clientes (id, nome, email, senha) FROM stdin;
1	kibebe	kibebe	1234
2	kibebe	lurdes@gmail.com	kibebe1234
3	tiago	ti@gmail.com	1234
4	lurdes	lu@gmail.com	12
6	vii	vii@gmail.com	12345
7	miga du	migadu@gmail	2010
8	mirelaunicornio	mi@gmail	1234
10	jorge	jorge@jorge.com.br	123456
\.


--
-- Data for Name: filmes; Type: TABLE DATA; Schema: public; Owner: mesacinema
--

COPY public.filmes (id, titulo, genero, ano_lancamento, duracao) FROM stdin;
\.


--
-- Data for Name: fotos_filmes; Type: TABLE DATA; Schema: public; Owner: mesacinema
--

COPY public.fotos_filmes (id, filme_id, nome_arquivo) FROM stdin;
\.


--
-- Data for Name: ingressos; Type: TABLE DATA; Schema: public; Owner: mesacinema
--

COPY public.ingressos (id, cliente_id, filme_id, data_ingresso) FROM stdin;
\.


--
-- Data for Name: sessoes; Type: TABLE DATA; Schema: public; Owner: mesacinema
--

COPY public.sessoes (id, filme_id, data_sessao, sala) FROM stdin;
\.


--
-- Name: clientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: mesacinema
--

SELECT pg_catalog.setval('public.clientes_id_seq', 10, true);


--
-- Name: filmes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: mesacinema
--

SELECT pg_catalog.setval('public.filmes_id_seq', 1, false);


--
-- Name: ingressos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: mesacinema
--

SELECT pg_catalog.setval('public.ingressos_id_seq', 1, false);


--
-- Name: sessoes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: mesacinema
--

SELECT pg_catalog.setval('public.sessoes_id_seq', 1, false);


--
-- Name: clientes clientes_email_key; Type: CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_email_key UNIQUE (email);


--
-- Name: clientes clientes_pkey; Type: CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_pkey PRIMARY KEY (id);


--
-- Name: filmes filmes_pkey; Type: CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.filmes
    ADD CONSTRAINT filmes_pkey PRIMARY KEY (id);


--
-- Name: ingressos ingressos_pkey; Type: CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.ingressos
    ADD CONSTRAINT ingressos_pkey PRIMARY KEY (id);


--
-- Name: sessoes sessoes_pkey; Type: CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.sessoes
    ADD CONSTRAINT sessoes_pkey PRIMARY KEY (id);


--
-- Name: ingressos ingressos_cliente_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.ingressos
    ADD CONSTRAINT ingressos_cliente_id_fkey FOREIGN KEY (cliente_id) REFERENCES public.clientes(id);


--
-- Name: ingressos ingressos_filme_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.ingressos
    ADD CONSTRAINT ingressos_filme_id_fkey FOREIGN KEY (filme_id) REFERENCES public.filmes(id);


--
-- Name: sessoes sessoes_filme_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: mesacinema
--

ALTER TABLE ONLY public.sessoes
    ADD CONSTRAINT sessoes_filme_id_fkey FOREIGN KEY (filme_id) REFERENCES public.filmes(id);


--
-- PostgreSQL database dump complete
--

\unrestrict s1DCluh4hQlTxKmmBlyiSFSLz8eMrs0OXutpV6QgnvSyQfNhi8UyXiYAHoRZaln


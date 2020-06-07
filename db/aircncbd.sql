--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

-- Started on 2020-06-07 11:26:53

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
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
-- TOC entry 207 (class 1259 OID 16454)
-- Name: contratam; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contratam (
    id_contrata integer NOT NULL,
    id_empresa integer,
    id_usuario integer
);


ALTER TABLE public.contratam OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 16452)
-- Name: contrata_id_contrata_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.contrata_id_contrata_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contrata_id_contrata_seq OWNER TO postgres;

--
-- TOC entry 2847 (class 0 OID 0)
-- Dependencies: 206
-- Name: contrata_id_contrata_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.contrata_id_contrata_seq OWNED BY public.contratam.id_contrata;


--
-- TOC entry 203 (class 1259 OID 16438)
-- Name: empresas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.empresas (
    id_empresa integer NOT NULL,
    nome character varying(40),
    email character varying(80),
    tecnologias character varying(200),
    tipo_vaga character varying(50),
    quant_vaga integer
);


ALTER TABLE public.empresas OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16436)
-- Name: empresa_id_empresa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.empresa_id_empresa_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.empresa_id_empresa_seq OWNER TO postgres;

--
-- TOC entry 2848 (class 0 OID 0)
-- Dependencies: 202
-- Name: empresa_id_empresa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.empresa_id_empresa_seq OWNED BY public.empresas.id_empresa;


--
-- TOC entry 205 (class 1259 OID 16446)
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuarios (
    id_usuario integer NOT NULL,
    perfil_github character varying(80),
    nome character varying(80),
    email character varying(80),
    tecnologias character varying(200)
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16444)
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 2849 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_usuario_seq OWNED BY public.usuarios.id_usuario;


--
-- TOC entry 2701 (class 2604 OID 16457)
-- Name: contratam id_contrata; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contratam ALTER COLUMN id_contrata SET DEFAULT nextval('public.contrata_id_contrata_seq'::regclass);


--
-- TOC entry 2699 (class 2604 OID 16441)
-- Name: empresas id_empresa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.empresas ALTER COLUMN id_empresa SET DEFAULT nextval('public.empresa_id_empresa_seq'::regclass);


--
-- TOC entry 2700 (class 2604 OID 16449)
-- Name: usuarios id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuario_id_usuario_seq'::regclass);


--
-- TOC entry 2841 (class 0 OID 16454)
-- Dependencies: 207
-- Data for Name: contratam; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.contratam (id_contrata, id_empresa, id_usuario) FROM stdin;
\.


--
-- TOC entry 2837 (class 0 OID 16438)
-- Dependencies: 203
-- Data for Name: empresas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.empresas (id_empresa, nome, email, tecnologias, tipo_vaga, quant_vaga) FROM stdin;
\.


--
-- TOC entry 2839 (class 0 OID 16446)
-- Dependencies: 205
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuarios (id_usuario, perfil_github, nome, email, tecnologias) FROM stdin;
\.


--
-- TOC entry 2850 (class 0 OID 0)
-- Dependencies: 206
-- Name: contrata_id_contrata_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.contrata_id_contrata_seq', 1, false);


--
-- TOC entry 2851 (class 0 OID 0)
-- Dependencies: 202
-- Name: empresa_id_empresa_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.empresa_id_empresa_seq', 1, false);


--
-- TOC entry 2852 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_usuario_seq', 1, false);


--
-- TOC entry 2707 (class 2606 OID 16459)
-- Name: contratam contrata_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contratam
    ADD CONSTRAINT contrata_pkey PRIMARY KEY (id_contrata);


--
-- TOC entry 2703 (class 2606 OID 16443)
-- Name: empresas empresa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.empresas
    ADD CONSTRAINT empresa_pkey PRIMARY KEY (id_empresa);


--
-- TOC entry 2705 (class 2606 OID 16451)
-- Name: usuarios usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);


--
-- TOC entry 2708 (class 2606 OID 16460)
-- Name: contratam contrata_id_empresa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contratam
    ADD CONSTRAINT contrata_id_empresa_fkey FOREIGN KEY (id_empresa) REFERENCES public.empresas(id_empresa);


--
-- TOC entry 2709 (class 2606 OID 16465)
-- Name: contratam contrata_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contratam
    ADD CONSTRAINT contrata_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id_usuario);


-- Completed on 2020-06-07 11:26:53

--
-- PostgreSQL database dump complete
--


PGDMP                          x            gps    12.1    12.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    24585    gps    DATABASE     �   CREATE DATABASE gps WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE gps;
                postgres    false            �            1259    24598    account    TABLE     �   CREATE TABLE public.account (
    username character varying(150),
    password character varying(150),
    nama character varying(150),
    photo character varying(250),
    email character varying(150),
    level bigint,
    id bigint NOT NULL
);
    DROP TABLE public.account;
       public         heap    postgres    false            �            1259    32840    account_id_seq    SEQUENCE     �   ALTER TABLE public.account ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.account_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 10000
    CACHE 1
);
            public          postgres    false    203            �            1259    24586    gps    TABLE     l  CREATE TABLE public.gps (
    "Brand_GPS" character varying(150),
    "GPS_Name" character varying(150),
    "Waranty_month" bigint,
    "Buy_Date" date,
    "Sold_Date" date,
    "Sold_To" character varying(150),
    "Photo" character varying(250),
    "Description" text,
    "Add" bigint,
    "Model_GPS" character varying(150),
    "Id_GPS" bigint NOT NULL
);
    DROP TABLE public.gps;
       public         heap    postgres    false            �            1259    32848    gps_Id_GPS_seq    SEQUENCE     �   ALTER TABLE public.gps ALTER COLUMN "Id_GPS" ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."gps_Id_GPS_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 10000
    CACHE 1
);
            public          postgres    false    202                      0    24598    account 
   TABLE DATA                 public          postgres    false    203   S                 0    24586    gps 
   TABLE DATA                 public          postgres    false    202                     0    0    account_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.account_id_seq', 2, true);
          public          postgres    false    204                       0    0    gps_Id_GPS_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public."gps_Id_GPS_seq"', 2, true);
          public          postgres    false    205               �   x���v
Q���W((M��L�KLN�/�+Q�s
�t��sW�q�Us�	u���
�)��y�:
�0�HӚ˓�2+�S�A������`q�Ĕ� $�����Xdhja`ihf`j���WUW����X吞��������7"��� 3�P�         �   x���Ak�0��~����$�n��V[�+�m�Y5JL7��3U��q���#���℆iq�����(ܲ�`w�4~���'��-^�?���`G{�d�g���q`����� �D��E�FI!�=��Ifd��)�oP��`��_m9���}���?��+C_���e���|��"�s�4_�x�����R�;����s���aN�)�"�\�����tUS0͍R�gL�Z�|e.?'��ӸG ���LB��     
PGDMP         *                x            gps    12.1    12.1 
               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            
           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    24585    gps    DATABASE     �   CREATE DATABASE gps WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE gps;
                postgres    false            �            1259    24586    gps    TABLE     m  CREATE TABLE public.gps (
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
    "Id_GPS" integer NOT NULL
);
    DROP TABLE public.gps;
       public         heap    postgres    false            �            1259    32786    gps_Id_GPS_seq    SEQUENCE     �   CREATE SEQUENCE public."gps_Id_GPS_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public."gps_Id_GPS_seq";
       public          postgres    false    202                       0    0    gps_Id_GPS_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public."gps_Id_GPS_seq" OWNED BY public.gps."Id_GPS";
          public          postgres    false    205            �
           2604    32788 
   gps Id_GPS    DEFAULT     l   ALTER TABLE ONLY public.gps ALTER COLUMN "Id_GPS" SET DEFAULT nextval('public."gps_Id_GPS_seq"'::regclass);
 ;   ALTER TABLE public.gps ALTER COLUMN "Id_GPS" DROP DEFAULT;
       public          postgres    false    205    202                      0    24586    gps 
   TABLE DATA           �   COPY public.gps ("Brand_GPS", "GPS_Name", "Waranty_month", "Buy_Date", "Sold_Date", "Sold_To", "Photo", "Description", "Add", "Model_GPS", "Id_GPS") FROM stdin;
    public          postgres    false    202   �
                  0    0    gps_Id_GPS_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public."gps_Id_GPS_seq"', 2, true);
          public          postgres    false    205               �   x�U�M�0���)� B:TN���D�n�N�"���������͛����CTZuj��FbΊ?�I&�����>R��hs�`�2�ժ���l+r��4�/C8�pv����� ː����\R���w��\�d	dV���k�Ĺ�l�Hx!�	�$�QՕF��\������1e����x4d)���ߋ%?Ɯ�'Y�     
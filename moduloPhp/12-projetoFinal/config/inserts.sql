USE sistema_web;

INSERT INTO utilizadores
(id, nome, apelido, email, telefone, username, password, `role`)
VALUES
(0, 'Admin', 'Admin', 'email@admin.com', '912029123', 'admin', '$2y$10$qPl63RAgv34.jnK0KDmuHuHd/UIy51BcVJQXv32v6mnEk2NtCrbE6', 'admin'),
(1, 'João', 'Silva', 'joao.silva@cliente.com', '912345678', 'joaosilva', '$2y$10$qPl63RAgv34.jnK0KDmuHuHd/UIy51BcVJQXv32v6mnEk2NtCrbE6', 'cliente'),
(2, 'Maria', 'Costa', 'maria.costa@cliente.com', '913456789', 'mariacosta', '$2y$10$qPl63RAgv34.jnK0KDmuHuHd/UIy51BcVJQXv32v6mnEk2NtCrbE6', 'cliente');

INSERT INTO noticias (titulo, conteudo, imagem)
VALUES
('Lançamento do Site', 'O site foi lançado com sucesso e está disponível para clientes.', 'lancamento.png'),
('Nova Funcionalidade', 'Adicionamos uma nova funcionalidade para agendar consultas online.', 'funcionalidade.png'),
('Atualização de Segurança', 'Foram aplicadas melhorias de segurança no login e sessão.', 'seguranca.png'),
('Campanha de Verão', 'Lançamos uma nova campanha de verão com ofertas especiais.', 'verao.png'),
('Relatório Mensal', 'O relatório mensal de desempenho do site está disponível.', 'relatorio.png'),
('Treinamento Online', 'Disponibilizamos treinamento para utilização do painel administrativo.', 'treinamento.png'),
('Nova Página de Serviços', 'Foi criada uma nova página para apresentação dos serviços.', 'servicos.png'),
('Melhorias no Atendimento', 'Implementamos melhorias no sistema de consultas e mensagens.', 'atendimento.png'),
('Feedback dos Clientes', 'Recebemos ótimos feedbacks e avaliamos novas melhorias.', 'feedback.png'),
('Parceira Comercial', 'Fechamos uma nova parceria comercial com um fornecedor local.', 'parceria.png');

INSERT INTO projetos (nome_projeto, descricao, tecnologia, tempo_conclusao, fotografia)
VALUES
('Site Corporativo', 'Desenvolvimento de site corporativo com painel administrativo.', 'PHP, MySQL, HTML, CSS', '30 dias', 'corporativo.png'),
('Sistema de Reservas', 'Sistema para gerir reservas e consultas para clientes.', 'PHP, JavaScript, MySQL', '45 dias', 'reservas.png'),
('Portal de Notícias', 'Portal para divulgação de notícias e posts institucionais.', 'PHP, Bootstrap, MySQL', '25 dias', 'portal_noticias.png'),
('Aplicativo Mobile', 'Desenvolvimento de app mobile para agendamento de serviços.', 'React Native, API REST', '60 dias', 'app_mobile.png'),
('Loja Online', 'Criação de e-commerce com gestão de produtos e pagamentos.', 'PHP, WooCommerce, MySQL', '40 dias', 'loja_online.png'),
('Sistema de CRM', 'Ferramenta para gestão de clientes e histórico de atendimentos.', 'PHP, Laravel, MySQL', '50 dias', 'crm.png'),
('Landing Page', 'Página de cadastro com foco em conversão de leads.', 'HTML, CSS, JavaScript', '15 dias', 'landing_page.png'),
('Blog Corporativo', 'Blog integrado com painel de administração para publicações.', 'WordPress, PHP, MySQL', '20 dias', 'blog_corporativo.png'),
('Sistema de Pagamentos', 'Integração com meios de pagamento e controle financeiro.', 'PHP, Stripe, MySQL', '35 dias', 'pagamentos.png'),
('Ferramenta de Agendamento', 'Dashboard para acompanhamento de consultas e horários.', 'PHP, JavaScript, MySQL', '28 dias', 'agendamento.png');

INSERT INTO consultas (id_utilizador, data_consulta, observacoes)
VALUES
(1, '2026-06-15 10:00:00', 'Consulta inicial para esclarecimento de dúvidas.'),
(1, '2026-06-20 14:30:00', 'Acompanhamento do projeto em desenvolvimento.'),
(2, '2026-06-18 09:00:00', 'Reunião para definição de requisitos do site.'),
(2, '2026-06-22 16:00:00', 'Discussão sobre layout e branding.'),
(1, '2026-06-25 11:00:00', 'Avaliação do protótipo funcional.'),
(2, '2026-06-27 14:00:00', 'Orientação sobre conteúdos e imagens.'),
(1, '2026-07-01 15:30:00', 'Aprovação final do escopo do projeto.'),
(2, '2026-07-03 10:30:00', 'Ajustes no cronograma de entrega.'),
(1, '2026-07-05 09:30:00', 'Verificação do progresso da integração.'),
(2, '2026-07-08 13:00:00', 'Revisão das consultas agendadas e prioridades.');

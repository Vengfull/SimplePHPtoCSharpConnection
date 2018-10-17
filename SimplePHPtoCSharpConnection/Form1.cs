using System;
using System.Net;
using System.Windows.Forms;

namespace SimplePHPtoCSharpConnection
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Button1_Click(object sender, EventArgs e)
        {
            using (WebClient client = new WebClient())
            {
                label2.Text = client.DownloadString("http://scenegaming.com/appconnect/index.php?" +
                    $"username={textBox1.Text}" + "&" + $"password={textBox2.Text}");
            }
        }
    }
}

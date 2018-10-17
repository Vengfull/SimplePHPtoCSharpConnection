using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace SimplePHPtoCSharpConnection
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string Response = new WebClient().DownloadString($"http://scenegaming.com/appconnect/index.php?username={textBox1.Text}");
            label2.Text = Response.ToLower();
        }
    }
}
